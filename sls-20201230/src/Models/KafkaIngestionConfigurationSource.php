<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class KafkaIngestionConfigurationSource extends Model
{
    /**
     * @var string
     */
    public $bootstrapServers;

    /**
     * @var string
     */
    public $communication;

    /**
     * @var string
     */
    public $consumerGroup;

    /**
     * @var string
     */
    public $defaultTimeSource;

    /**
     * @var bool
     */
    public $enableSlsContext;

    /**
     * @var bool
     */
    public $enableVpcNat;

    /**
     * @var string
     */
    public $encoding;

    /**
     * @var mixed[]
     */
    public $format;

    /**
     * @var string
     */
    public $fromPosition;

    /**
     * @var string
     */
    public $nameResolutions;

    /**
     * @var bool
     */
    public $parseArray;

    /**
     * @var string
     */
    public $processorId;

    /**
     * @var string
     */
    public $securityGroups;

    /**
     * @var string
     */
    public $timeField;

    /**
     * @var string
     */
    public $timeFormat;

    /**
     * @var string
     */
    public $timePattern;

    /**
     * @var string
     */
    public $timeZone;

    /**
     * @var string
     */
    public $topics;

    /**
     * @var string
     */
    public $valueType;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'bootstrapServers' => 'bootstrapServers',
        'communication' => 'communication',
        'consumerGroup' => 'consumerGroup',
        'defaultTimeSource' => 'defaultTimeSource',
        'enableSlsContext' => 'enableSlsContext',
        'enableVpcNat' => 'enableVpcNat',
        'encoding' => 'encoding',
        'format' => 'format',
        'fromPosition' => 'fromPosition',
        'nameResolutions' => 'nameResolutions',
        'parseArray' => 'parseArray',
        'processorId' => 'processorId',
        'securityGroups' => 'securityGroups',
        'timeField' => 'timeField',
        'timeFormat' => 'timeFormat',
        'timePattern' => 'timePattern',
        'timeZone' => 'timeZone',
        'topics' => 'topics',
        'valueType' => 'valueType',
        'vpcId' => 'vpcId',
        'vswitchId' => 'vswitchId',
    ];

    public function validate()
    {
        if (\is_array($this->format)) {
            Model::validateArray($this->format);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bootstrapServers) {
            $res['bootstrapServers'] = $this->bootstrapServers;
        }

        if (null !== $this->communication) {
            $res['communication'] = $this->communication;
        }

        if (null !== $this->consumerGroup) {
            $res['consumerGroup'] = $this->consumerGroup;
        }

        if (null !== $this->defaultTimeSource) {
            $res['defaultTimeSource'] = $this->defaultTimeSource;
        }

        if (null !== $this->enableSlsContext) {
            $res['enableSlsContext'] = $this->enableSlsContext;
        }

        if (null !== $this->enableVpcNat) {
            $res['enableVpcNat'] = $this->enableVpcNat;
        }

        if (null !== $this->encoding) {
            $res['encoding'] = $this->encoding;
        }

        if (null !== $this->format) {
            if (\is_array($this->format)) {
                $res['format'] = [];
                foreach ($this->format as $key1 => $value1) {
                    $res['format'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->fromPosition) {
            $res['fromPosition'] = $this->fromPosition;
        }

        if (null !== $this->nameResolutions) {
            $res['nameResolutions'] = $this->nameResolutions;
        }

        if (null !== $this->parseArray) {
            $res['parseArray'] = $this->parseArray;
        }

        if (null !== $this->processorId) {
            $res['processorId'] = $this->processorId;
        }

        if (null !== $this->securityGroups) {
            $res['securityGroups'] = $this->securityGroups;
        }

        if (null !== $this->timeField) {
            $res['timeField'] = $this->timeField;
        }

        if (null !== $this->timeFormat) {
            $res['timeFormat'] = $this->timeFormat;
        }

        if (null !== $this->timePattern) {
            $res['timePattern'] = $this->timePattern;
        }

        if (null !== $this->timeZone) {
            $res['timeZone'] = $this->timeZone;
        }

        if (null !== $this->topics) {
            $res['topics'] = $this->topics;
        }

        if (null !== $this->valueType) {
            $res['valueType'] = $this->valueType;
        }

        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        if (null !== $this->vswitchId) {
            $res['vswitchId'] = $this->vswitchId;
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
        if (isset($map['bootstrapServers'])) {
            $model->bootstrapServers = $map['bootstrapServers'];
        }

        if (isset($map['communication'])) {
            $model->communication = $map['communication'];
        }

        if (isset($map['consumerGroup'])) {
            $model->consumerGroup = $map['consumerGroup'];
        }

        if (isset($map['defaultTimeSource'])) {
            $model->defaultTimeSource = $map['defaultTimeSource'];
        }

        if (isset($map['enableSlsContext'])) {
            $model->enableSlsContext = $map['enableSlsContext'];
        }

        if (isset($map['enableVpcNat'])) {
            $model->enableVpcNat = $map['enableVpcNat'];
        }

        if (isset($map['encoding'])) {
            $model->encoding = $map['encoding'];
        }

        if (isset($map['format'])) {
            if (!empty($map['format'])) {
                $model->format = [];
                foreach ($map['format'] as $key1 => $value1) {
                    $model->format[$key1] = $value1;
                }
            }
        }

        if (isset($map['fromPosition'])) {
            $model->fromPosition = $map['fromPosition'];
        }

        if (isset($map['nameResolutions'])) {
            $model->nameResolutions = $map['nameResolutions'];
        }

        if (isset($map['parseArray'])) {
            $model->parseArray = $map['parseArray'];
        }

        if (isset($map['processorId'])) {
            $model->processorId = $map['processorId'];
        }

        if (isset($map['securityGroups'])) {
            $model->securityGroups = $map['securityGroups'];
        }

        if (isset($map['timeField'])) {
            $model->timeField = $map['timeField'];
        }

        if (isset($map['timeFormat'])) {
            $model->timeFormat = $map['timeFormat'];
        }

        if (isset($map['timePattern'])) {
            $model->timePattern = $map['timePattern'];
        }

        if (isset($map['timeZone'])) {
            $model->timeZone = $map['timeZone'];
        }

        if (isset($map['topics'])) {
            $model->topics = $map['topics'];
        }

        if (isset($map['valueType'])) {
            $model->valueType = $map['valueType'];
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        if (isset($map['vswitchId'])) {
            $model->vswitchId = $map['vswitchId'];
        }

        return $model;
    }
}
