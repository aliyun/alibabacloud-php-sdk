<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListServiceGroupMonitorSourceTemplatesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $fields;

    /**
     * @example 1000
     *
     * @var int
     */
    public $monitorSourceId;

    /**
     * @example zabbix
     *
     * @var string
     */
    public $monitorSourceName;

    /**
     * @example ""
     *
     * @var string
     */
    public $templateContent;

    /**
     * @example 1000
     *
     * @var int
     */
    public $templateId;
    protected $_name = [
        'fields'            => 'fields',
        'monitorSourceId'   => 'monitorSourceId',
        'monitorSourceName' => 'monitorSourceName',
        'templateContent'   => 'templateContent',
        'templateId'        => 'templateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fields) {
            $res['fields'] = $this->fields;
        }
        if (null !== $this->monitorSourceId) {
            $res['monitorSourceId'] = $this->monitorSourceId;
        }
        if (null !== $this->monitorSourceName) {
            $res['monitorSourceName'] = $this->monitorSourceName;
        }
        if (null !== $this->templateContent) {
            $res['templateContent'] = $this->templateContent;
        }
        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fields'])) {
            if (!empty($map['fields'])) {
                $model->fields = $map['fields'];
            }
        }
        if (isset($map['monitorSourceId'])) {
            $model->monitorSourceId = $map['monitorSourceId'];
        }
        if (isset($map['monitorSourceName'])) {
            $model->monitorSourceName = $map['monitorSourceName'];
        }
        if (isset($map['templateContent'])) {
            $model->templateContent = $map['templateContent'];
        }
        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        return $model;
    }
}
