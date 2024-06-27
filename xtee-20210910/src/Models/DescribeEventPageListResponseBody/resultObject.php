<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventPageListResponseBody;

use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventPageListResponseBody\resultObject\children;
use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var children[]
     */
    public $children;

    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $eventStatus;

    /**
     * @var string
     */
    public $eventType;

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
    public $templateType;

    /**
     * @var int
     */
    public $userCount;
    protected $_name = [
        'children'     => 'children',
        'eventCode'    => 'eventCode',
        'eventName'    => 'eventName',
        'eventStatus'  => 'eventStatus',
        'eventType'    => 'eventType',
        'gmtCreate'    => 'gmtCreate',
        'gmtModified'  => 'gmtModified',
        'id'           => 'id',
        'ruleCount'    => 'ruleCount',
        'templateCode' => 'templateCode',
        'templateName' => 'templateName',
        'templateType' => 'templateType',
        'userCount'    => 'userCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->children) {
            $res['children'] = [];
            if (null !== $this->children && \is_array($this->children)) {
                $n = 0;
                foreach ($this->children as $item) {
                    $res['children'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->eventCode) {
            $res['eventCode'] = $this->eventCode;
        }
        if (null !== $this->eventName) {
            $res['eventName'] = $this->eventName;
        }
        if (null !== $this->eventStatus) {
            $res['eventStatus'] = $this->eventStatus;
        }
        if (null !== $this->eventType) {
            $res['eventType'] = $this->eventType;
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
        if (null !== $this->templateType) {
            $res['templateType'] = $this->templateType;
        }
        if (null !== $this->userCount) {
            $res['userCount'] = $this->userCount;
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
        if (isset($map['children'])) {
            if (!empty($map['children'])) {
                $model->children = [];
                $n               = 0;
                foreach ($map['children'] as $item) {
                    $model->children[$n++] = null !== $item ? children::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['eventCode'])) {
            $model->eventCode = $map['eventCode'];
        }
        if (isset($map['eventName'])) {
            $model->eventName = $map['eventName'];
        }
        if (isset($map['eventStatus'])) {
            $model->eventStatus = $map['eventStatus'];
        }
        if (isset($map['eventType'])) {
            $model->eventType = $map['eventType'];
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
        if (isset($map['templateType'])) {
            $model->templateType = $map['templateType'];
        }
        if (isset($map['userCount'])) {
            $model->userCount = $map['userCount'];
        }

        return $model;
    }
}
