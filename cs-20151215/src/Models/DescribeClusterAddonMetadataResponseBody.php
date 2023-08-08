<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterAddonMetadataResponseBody extends Model
{
    /**
     * @description The schema of component parameters.
     *
     * @example {\n  \"$schema\": \"https://json-schema.org/draft-07/schema#\",\n  \"properties\": {\n    \"controller\": {\n      \"description\": \"\",\n      \"properties\": {\n        \"resources\": {\n          \"properties\": {\n            \"armsPrometheusOperator\": {\n              \"properties\": {\n                \"resources\": {\n                  \"properties\": {\n                    \"limits\": {\n                      \"properties\": {\n                        \"memory\": {\n                          \"description\": \"memory limit of arms prometheus operator\",\n                          \"type\": \"string\",\n                          \"pattern\": \"^[1-9][0-9]*(\\\\.\\\\d+)?(K|Ki|M|Mi|G|Gi|T|Ti)?$\",\n                          \"default\": \"500m\",\n                          \"x-ui-description\": \"<mds-key>\",\n                          \"x-ui-prompt-message\": \"<mds-key>\",\n                          \"x-ui-validation-message\": \"<mds-key>\",\n                          \"x-ui-additional-tips\": \"<mds-key>\"\n                        },\n                        \"cpu\": {\n                          \"description\": \"cpu limit of arms prometheus operator\",\n                          \"type\": \"string\",\n                          \"pattern\": \"^[1-9][0-9]*(m|\\\\.\\\\d+)?$\",\n                          \"default\": \"1.0\",\n                          \"x-ui-description\": \"<mds-key>\",\n                          \"x-ui-validation-message\": \"<mds-key>\"\n                        }\n                      },\n                      \"type\": \"object\",\n                      \"additionalProperties\": false\n                    },\n                    \"requests\": {\n                      \"properties\": {\n                        \"memory\": {\n                          \"description\": \"memory request of arms prometheus operator\",\n                          \"type\": \"string\",\n                          \"pattern\": \"^[1-9][0-9]*(\\\\.\\\\d+)?(K|Ki|M|Mi|G|Gi|T|Ti)?$\",\n                          \"default\": \"500m\",\n                          \"x-ui-description\": \"<mds-key>\",\n                          \"x-ui-validation-message\": \"<mds-key>\"\n                        },\n                        \"cpu\": {\n                          \"description\": \"cpu request of arms prometheus operator\",\n                          \"type\": \"string\",\n                          \"pattern\": \"^[1-9][0-9]*(m|\\\\.\\\\d+)?$\",\n                          \"default\": \"1.0\",\n                          \"x-ui-description\": \"<mds-key>\",\n                          \"x-ui-validation-message\": \"<mds-key>\"\n                        }\n                      },\n                      \"type\": \"object\",\n                      \"additionalProperties\": false\n                    }\n                  },\n                  \"type\": \"object\",\n                  \"additionalProperties\": false\n                }\n              },\n              \"type\": \"object\",\n              \"additionalProperties\": false\n            }\n          },\n          \"type\": \"object\",\n          \"additionalProperties\": false\n        }\n      },\n      \"type\": \"object\",\n      \"additionalProperties\": false\n    }\n  },\n  \"title\": \"Values\",\n  \"type\": \"object\",\n  \"additionalProperties\": false\n}
     *
     * @var string
     */
    public $configSchema;

    /**
     * @description The name of the component.
     *
     * @example coredns
     *
     * @var string
     */
    public $name;

    /**
     * @description The version of the component.
     *
     * @example 1.8.4.1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'configSchema' => 'config_schema',
        'name'         => 'name',
        'version'      => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configSchema) {
            $res['config_schema'] = $this->configSchema;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterAddonMetadataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['config_schema'])) {
            $model->configSchema = $map['config_schema'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
