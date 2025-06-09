<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class MaxComputeExportConfigurationSink extends Model
{
    /**
     * @var string
     */
    public $bufferInterval;

    /**
     * @var string[]
     */
    public $fields;

    /**
     * @var bool
     */
    public $filterInvalid;

    /**
     * @var string
     */
    public $odpsAccessKeyId;

    /**
     * @var string
     */
    public $odpsAccessSecret;

    /**
     * @var string
     */
    public $odpsEndpoint;

    /**
     * @var string
     */
    public $odpsProject;

    /**
     * @var string
     */
    public $odpsRolearn;

    /**
     * @var string
     */
    public $odpsTable;

    /**
     * @var string
     */
    public $odpsTunnelEndpoint;

    /**
     * @var string[]
     */
    public $partitionColumn;

    /**
     * @var string
     */
    public $partitionTimeFormat;

    /**
     * @var string
     */
    public $timeFormatType;

    /**
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'bufferInterval' => 'bufferInterval',
        'fields' => 'fields',
        'filterInvalid' => 'filterInvalid',
        'odpsAccessKeyId' => 'odpsAccessKeyId',
        'odpsAccessSecret' => 'odpsAccessSecret',
        'odpsEndpoint' => 'odpsEndpoint',
        'odpsProject' => 'odpsProject',
        'odpsRolearn' => 'odpsRolearn',
        'odpsTable' => 'odpsTable',
        'odpsTunnelEndpoint' => 'odpsTunnelEndpoint',
        'partitionColumn' => 'partitionColumn',
        'partitionTimeFormat' => 'partitionTimeFormat',
        'timeFormatType' => 'timeFormatType',
        'timeZone' => 'timeZone',
    ];

    public function validate()
    {
        if (\is_array($this->fields)) {
            Model::validateArray($this->fields);
        }
        if (\is_array($this->partitionColumn)) {
            Model::validateArray($this->partitionColumn);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bufferInterval) {
            $res['bufferInterval'] = $this->bufferInterval;
        }

        if (null !== $this->fields) {
            if (\is_array($this->fields)) {
                $res['fields'] = [];
                $n1 = 0;
                foreach ($this->fields as $item1) {
                    $res['fields'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->filterInvalid) {
            $res['filterInvalid'] = $this->filterInvalid;
        }

        if (null !== $this->odpsAccessKeyId) {
            $res['odpsAccessKeyId'] = $this->odpsAccessKeyId;
        }

        if (null !== $this->odpsAccessSecret) {
            $res['odpsAccessSecret'] = $this->odpsAccessSecret;
        }

        if (null !== $this->odpsEndpoint) {
            $res['odpsEndpoint'] = $this->odpsEndpoint;
        }

        if (null !== $this->odpsProject) {
            $res['odpsProject'] = $this->odpsProject;
        }

        if (null !== $this->odpsRolearn) {
            $res['odpsRolearn'] = $this->odpsRolearn;
        }

        if (null !== $this->odpsTable) {
            $res['odpsTable'] = $this->odpsTable;
        }

        if (null !== $this->odpsTunnelEndpoint) {
            $res['odpsTunnelEndpoint'] = $this->odpsTunnelEndpoint;
        }

        if (null !== $this->partitionColumn) {
            if (\is_array($this->partitionColumn)) {
                $res['partitionColumn'] = [];
                $n1 = 0;
                foreach ($this->partitionColumn as $item1) {
                    $res['partitionColumn'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->partitionTimeFormat) {
            $res['partitionTimeFormat'] = $this->partitionTimeFormat;
        }

        if (null !== $this->timeFormatType) {
            $res['timeFormatType'] = $this->timeFormatType;
        }

        if (null !== $this->timeZone) {
            $res['timeZone'] = $this->timeZone;
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
        if (isset($map['bufferInterval'])) {
            $model->bufferInterval = $map['bufferInterval'];
        }

        if (isset($map['fields'])) {
            if (!empty($map['fields'])) {
                $model->fields = [];
                $n1 = 0;
                foreach ($map['fields'] as $item1) {
                    $model->fields[$n1++] = $item1;
                }
            }
        }

        if (isset($map['filterInvalid'])) {
            $model->filterInvalid = $map['filterInvalid'];
        }

        if (isset($map['odpsAccessKeyId'])) {
            $model->odpsAccessKeyId = $map['odpsAccessKeyId'];
        }

        if (isset($map['odpsAccessSecret'])) {
            $model->odpsAccessSecret = $map['odpsAccessSecret'];
        }

        if (isset($map['odpsEndpoint'])) {
            $model->odpsEndpoint = $map['odpsEndpoint'];
        }

        if (isset($map['odpsProject'])) {
            $model->odpsProject = $map['odpsProject'];
        }

        if (isset($map['odpsRolearn'])) {
            $model->odpsRolearn = $map['odpsRolearn'];
        }

        if (isset($map['odpsTable'])) {
            $model->odpsTable = $map['odpsTable'];
        }

        if (isset($map['odpsTunnelEndpoint'])) {
            $model->odpsTunnelEndpoint = $map['odpsTunnelEndpoint'];
        }

        if (isset($map['partitionColumn'])) {
            if (!empty($map['partitionColumn'])) {
                $model->partitionColumn = [];
                $n1 = 0;
                foreach ($map['partitionColumn'] as $item1) {
                    $model->partitionColumn[$n1++] = $item1;
                }
            }
        }

        if (isset($map['partitionTimeFormat'])) {
            $model->partitionTimeFormat = $map['partitionTimeFormat'];
        }

        if (isset($map['timeFormatType'])) {
            $model->timeFormatType = $map['timeFormatType'];
        }

        if (isset($map['timeZone'])) {
            $model->timeZone = $map['timeZone'];
        }

        return $model;
    }
}
