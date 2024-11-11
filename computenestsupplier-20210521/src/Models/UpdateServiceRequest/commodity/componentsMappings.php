<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest\commodity;

use AlibabaCloud\Tea\Model;

class componentsMappings extends Model
{
    /**
     * @description The language of the service. Valid values:
     *
     *   zh-CN: Chinese
     *   en-US: English
     *
     * @var string[]
     */
    public $mappings;

    /**
     * @description { "Logstores": [ { "LogstoreName": "access-log", "LogPath": "/home/admin/app/logs", # This parameter is not required for containers. Configure the parameter in the YAML file. "FilePattern": "access.log\\*" # This parameter is not required for containers. Configure the parameter in the YAML file. } ] }
     *
     * @example 此参数不对外开放
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'mappings'     => 'Mappings',
        'templateName' => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mappings) {
            $res['Mappings'] = $this->mappings;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return componentsMappings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mappings'])) {
            $model->mappings = $map['Mappings'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
