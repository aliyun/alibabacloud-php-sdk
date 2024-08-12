<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class ListTerminalRequest extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $buildId;

    /**
     * @var int
     */
    public $clientType;

    /**
     * @var bool
     */
    public $inManage;

    /**
     * @var string
     */
    public $ipv4;

    /**
     * @var string
     */
    public $locationInfo;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $searchKeyword;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $terminalGroupId;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'alias'           => 'Alias',
        'buildId'         => 'BuildId',
        'clientType'      => 'ClientType',
        'inManage'        => 'InManage',
        'ipv4'            => 'Ipv4',
        'locationInfo'    => 'LocationInfo',
        'maxResults'      => 'MaxResults',
        'model'           => 'Model',
        'nextToken'       => 'NextToken',
        'searchKeyword'   => 'SearchKeyword',
        'serialNumber'    => 'SerialNumber',
        'terminalGroupId' => 'TerminalGroupId',
        'uuid'            => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->buildId) {
            $res['BuildId'] = $this->buildId;
        }
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
        if (null !== $this->inManage) {
            $res['InManage'] = $this->inManage;
        }
        if (null !== $this->ipv4) {
            $res['Ipv4'] = $this->ipv4;
        }
        if (null !== $this->locationInfo) {
            $res['LocationInfo'] = $this->locationInfo;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->searchKeyword) {
            $res['SearchKeyword'] = $this->searchKeyword;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->terminalGroupId) {
            $res['TerminalGroupId'] = $this->terminalGroupId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTerminalRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['BuildId'])) {
            $model->buildId = $map['BuildId'];
        }
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
        if (isset($map['InManage'])) {
            $model->inManage = $map['InManage'];
        }
        if (isset($map['Ipv4'])) {
            $model->ipv4 = $map['Ipv4'];
        }
        if (isset($map['LocationInfo'])) {
            $model->locationInfo = $map['LocationInfo'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['SearchKeyword'])) {
            $model->searchKeyword = $map['SearchKeyword'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['TerminalGroupId'])) {
            $model->terminalGroupId = $map['TerminalGroupId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
