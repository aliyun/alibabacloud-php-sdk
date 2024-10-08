<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class ListTerminalsRequest extends Model
{
    /**
     * @var bool
     */
    public $inManage;

    /**
     * @example 200
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example AAAAAdEdsXbwG2ZlbWCzN4wTTg6wQvfp7u1BJl4bxCAby41POSaYAlCvfULQpkAnb0ff****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $passwordFreeLoginUser;

    /**
     * @example DemoDevice
     *
     * @var string
     */
    public $searchKeyword;

    /**
     * @var string[]
     */
    public $serialNumbers;

    /**
     * @example tg-default
     *
     * @var string
     */
    public $terminalGroupId;

    /**
     * @var string[]
     */
    public $uuids;

    /**
     * @var bool
     */
    public $withBindUser;
    protected $_name = [
        'inManage'              => 'InManage',
        'maxResults'            => 'MaxResults',
        'nextToken'             => 'NextToken',
        'passwordFreeLoginUser' => 'PasswordFreeLoginUser',
        'searchKeyword'         => 'SearchKeyword',
        'serialNumbers'         => 'SerialNumbers',
        'terminalGroupId'       => 'TerminalGroupId',
        'uuids'                 => 'Uuids',
        'withBindUser'          => 'WithBindUser',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inManage) {
            $res['InManage'] = $this->inManage;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->passwordFreeLoginUser) {
            $res['PasswordFreeLoginUser'] = $this->passwordFreeLoginUser;
        }
        if (null !== $this->searchKeyword) {
            $res['SearchKeyword'] = $this->searchKeyword;
        }
        if (null !== $this->serialNumbers) {
            $res['SerialNumbers'] = $this->serialNumbers;
        }
        if (null !== $this->terminalGroupId) {
            $res['TerminalGroupId'] = $this->terminalGroupId;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }
        if (null !== $this->withBindUser) {
            $res['WithBindUser'] = $this->withBindUser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTerminalsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InManage'])) {
            $model->inManage = $map['InManage'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PasswordFreeLoginUser'])) {
            $model->passwordFreeLoginUser = $map['PasswordFreeLoginUser'];
        }
        if (isset($map['SearchKeyword'])) {
            $model->searchKeyword = $map['SearchKeyword'];
        }
        if (isset($map['SerialNumbers'])) {
            if (!empty($map['SerialNumbers'])) {
                $model->serialNumbers = $map['SerialNumbers'];
            }
        }
        if (isset($map['TerminalGroupId'])) {
            $model->terminalGroupId = $map['TerminalGroupId'];
        }
        if (isset($map['Uuids'])) {
            if (!empty($map['Uuids'])) {
                $model->uuids = $map['Uuids'];
            }
        }
        if (isset($map['WithBindUser'])) {
            $model->withBindUser = $map['WithBindUser'];
        }

        return $model;
    }
}
