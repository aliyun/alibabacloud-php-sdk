<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTemplatePageListResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $ruleCount;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateStatus;

    /**
     * @var string
     */
    public $templateType;

    /**
     * @var int
     */
    public $userCount;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'description'    => 'description',
        'eventCode'      => 'eventCode',
        'eventName'      => 'eventName',
        'gmtCreate'      => 'gmtCreate',
        'gmtModified'    => 'gmtModified',
        'id'             => 'id',
        'ruleCount'      => 'ruleCount',
        'templateCode'   => 'templateCode',
        'templateName'   => 'templateName',
        'templateStatus' => 'templateStatus',
        'templateType'   => 'templateType',
        'userCount'      => 'userCount',
        'version'        => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->eventCode) {
            $res['eventCode'] = $this->eventCode;
        }
        if (null !== $this->eventName) {
            $res['eventName'] = $this->eventName;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->ruleCount) {
            $res['ruleCount'] = $this->ruleCount;
        }
        if (null !== $this->templateCode) {
            $res['templateCode'] = $this->templateCode;
        }
        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
        }
        if (null !== $this->templateStatus) {
            $res['templateStatus'] = $this->templateStatus;
        }
        if (null !== $this->templateType) {
            $res['templateType'] = $this->templateType;
        }
        if (null !== $this->userCount) {
            $res['userCount'] = $this->userCount;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['eventCode'])) {
            $model->eventCode = $map['eventCode'];
        }
        if (isset($map['eventName'])) {
            $model->eventName = $map['eventName'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['ruleCount'])) {
            $model->ruleCount = $map['ruleCount'];
        }
        if (isset($map['templateCode'])) {
            $model->templateCode = $map['templateCode'];
        }
        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }
        if (isset($map['templateStatus'])) {
            $model->templateStatus = $map['templateStatus'];
        }
        if (isset($map['templateType'])) {
            $model->templateType = $map['templateType'];
        }
        if (isset($map['userCount'])) {
            $model->userCount = $map['userCount'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
