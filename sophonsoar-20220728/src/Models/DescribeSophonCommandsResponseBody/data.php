<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSophonCommandsResponseBody;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSophonCommandsResponseBody\data\paramConfig;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The description of the command.
     *
     * @example This is a action of processing for WAF
     *
     * @var string
     */
    public $description;

    /**
     * @description The display name of the command.
     *
     * @example WAF Process IP
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The name of the command.
     *
     * @example waf_process_ip_v2
     *
     * @var string
     */
    public $name;

    /**
     * @description The parameter configurations.
     *
     * @var paramConfig[]
     */
    public $paramConfig;
    protected $_name = [
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'name'        => 'Name',
        'paramConfig' => 'ParamConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->paramConfig) {
            $res['ParamConfig'] = [];
            if (null !== $this->paramConfig && \is_array($this->paramConfig)) {
                $n = 0;
                foreach ($this->paramConfig as $item) {
                    $res['ParamConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParamConfig'])) {
            if (!empty($map['ParamConfig'])) {
                $model->paramConfig = [];
                $n                  = 0;
                foreach ($map['ParamConfig'] as $item) {
                    $model->paramConfig[$n++] = null !== $item ? paramConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
