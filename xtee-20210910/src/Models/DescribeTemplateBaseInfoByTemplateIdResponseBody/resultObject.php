<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTemplateBaseInfoByTemplateIdResponseBody;

use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTemplateBaseInfoByTemplateIdResponseBody\resultObject\inputFields;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTemplateBaseInfoByTemplateIdResponseBody\resultObject\ruleDetails;
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
     * @var string
     */
    public $eventStauts;

    /**
     * @var inputFields[]
     */
    public $inputFields;

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

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'description'  => 'description',
        'eventCode'    => 'eventCode',
        'eventName'    => 'eventName',
        'eventStauts'  => 'eventStauts',
        'inputFields'  => 'inputFields',
        'ruleDetails'  => 'ruleDetails',
        'templateCode' => 'templateCode',
        'templateName' => 'templateName',
        'templateType' => 'templateType',
        'version'      => 'version',
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
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
