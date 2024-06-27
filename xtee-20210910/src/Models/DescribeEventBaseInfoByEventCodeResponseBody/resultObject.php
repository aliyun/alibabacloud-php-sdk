<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventBaseInfoByEventCodeResponseBody;

use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventBaseInfoByEventCodeResponseBody\resultObject\inputFields;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventBaseInfoByEventCodeResponseBody\resultObject\ruleDetails;
use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var int
     */
    public $bizVersion;

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
    public $eventStauts;

    /**
     * @var inputFields[]
     */
    public $inputFields;

    /**
     * @var string
     */
    public $memo;

    /**
     * @var ruleDetails[]
     */
    public $ruleDetails;

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
    protected $_name = [
        'bizVersion'   => 'bizVersion',
        'eventCode'    => 'eventCode',
        'eventName'    => 'eventName',
        'eventStauts'  => 'eventStauts',
        'inputFields'  => 'inputFields',
        'memo'         => 'memo',
        'ruleDetails'  => 'ruleDetails',
        'templateCode' => 'templateCode',
        'templateName' => 'templateName',
        'templateType' => 'templateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizVersion) {
            $res['bizVersion'] = $this->bizVersion;
        }
        if (null !== $this->eventCode) {
            $res['eventCode'] = $this->eventCode;
        }
        if (null !== $this->eventName) {
            $res['eventName'] = $this->eventName;
        }
        if (null !== $this->eventStauts) {
            $res['eventStauts'] = $this->eventStauts;
        }
        if (null !== $this->inputFields) {
            $res['inputFields'] = [];
            if (null !== $this->inputFields && \is_array($this->inputFields)) {
                $n = 0;
                foreach ($this->inputFields as $item) {
                    $res['inputFields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->memo) {
            $res['memo'] = $this->memo;
        }
        if (null !== $this->ruleDetails) {
            $res['ruleDetails'] = [];
            if (null !== $this->ruleDetails && \is_array($this->ruleDetails)) {
                $n = 0;
                foreach ($this->ruleDetails as $item) {
                    $res['ruleDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['bizVersion'])) {
            $model->bizVersion = $map['bizVersion'];
        }
        if (isset($map['eventCode'])) {
            $model->eventCode = $map['eventCode'];
        }
        if (isset($map['eventName'])) {
            $model->eventName = $map['eventName'];
        }
        if (isset($map['eventStauts'])) {
            $model->eventStauts = $map['eventStauts'];
        }
        if (isset($map['inputFields'])) {
            if (!empty($map['inputFields'])) {
                $model->inputFields = [];
                $n                  = 0;
                foreach ($map['inputFields'] as $item) {
                    $model->inputFields[$n++] = null !== $item ? inputFields::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['memo'])) {
            $model->memo = $map['memo'];
        }
        if (isset($map['ruleDetails'])) {
            if (!empty($map['ruleDetails'])) {
                $model->ruleDetails = [];
                $n                  = 0;
                foreach ($map['ruleDetails'] as $item) {
                    $model->ruleDetails[$n++] = null !== $item ? ruleDetails::fromMap($item) : $item;
                }
            }
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

        return $model;
    }
}
