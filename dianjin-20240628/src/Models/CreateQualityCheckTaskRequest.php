<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateQualityCheckTaskRequest\conversationList;

class CreateQualityCheckTaskRequest extends Model
{
    /**
     * @var conversationList
     */
    public $conversationList;
    /**
     * @var string
     */
    public $gmtService;
    /**
     * @var string[]
     */
    public $metaData;
    /**
     * @var string[]
     */
    public $qualityGroup;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'conversationList' => 'conversationList',
        'gmtService'       => 'gmtService',
        'metaData'         => 'metaData',
        'qualityGroup'     => 'qualityGroup',
        'requestId'        => 'requestId',
        'type'             => 'type',
    ];

    public function validate()
    {
        if (null !== $this->conversationList) {
            $this->conversationList->validate();
        }
        if (\is_array($this->metaData)) {
            Model::validateArray($this->metaData);
        }
        if (\is_array($this->qualityGroup)) {
            Model::validateArray($this->qualityGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conversationList) {
            $res['conversationList'] = null !== $this->conversationList ? $this->conversationList->toArray($noStream) : $this->conversationList;
        }

        if (null !== $this->gmtService) {
            $res['gmtService'] = $this->gmtService;
        }

        if (null !== $this->metaData) {
            if (\is_array($this->metaData)) {
                $res['metaData'] = [];
                foreach ($this->metaData as $key1 => $value1) {
                    $res['metaData'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->qualityGroup) {
            if (\is_array($this->qualityGroup)) {
                $res['qualityGroup'] = [];
                $n1                  = 0;
                foreach ($this->qualityGroup as $item1) {
                    $res['qualityGroup'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['conversationList'])) {
            $model->conversationList = conversationList::fromMap($map['conversationList']);
        }

        if (isset($map['gmtService'])) {
            $model->gmtService = $map['gmtService'];
        }

        if (isset($map['metaData'])) {
            if (!empty($map['metaData'])) {
                $model->metaData = [];
                foreach ($map['metaData'] as $key1 => $value1) {
                    $model->metaData[$key1] = $value1;
                }
            }
        }

        if (isset($map['qualityGroup'])) {
            if (!empty($map['qualityGroup'])) {
                $model->qualityGroup = [];
                $n1                  = 0;
                foreach ($map['qualityGroup'] as $item1) {
                    $model->qualityGroup[$n1++] = $item1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
