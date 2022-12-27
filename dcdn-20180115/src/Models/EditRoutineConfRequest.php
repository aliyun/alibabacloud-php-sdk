<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class EditRoutineConfRequest extends Model
{
    /**
     * @example the description of this routine
     *
     * @var string
     */
    public $description;

    /**
     * @example {"Staging":{"SpecName":"50ms","AllowedHosts":["test-a.alicdn.com","test-b.alicdn.com"]},"Production":{"SpecName":"50ms","AllowedHosts":["test-c.alicdn.com","test-d.alicdn.com"]},"Preset_Canary_Zhejiang":{"SpecName":"100ms","AllowedHosts":["test-e.alicdn.com","test-f.alicdn.com"]},"Preset_Canary_Beijing":{"SpecName":"5ms","AllowedHosts":["test-g.alicdn.com","test-h.alicdn.com"]},"Preset_Canary_Not_Exist":{"SpecName":"5ms","CodeRev":"1622446907645949975","AllowedHosts":["error hosts"]}}
     *
     * @var mixed[]
     */
    public $envConf;

    /**
     * @example test-slc
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'description' => 'Description',
        'envConf'     => 'EnvConf',
        'name'        => 'Name',
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
        if (null !== $this->envConf) {
            $res['EnvConf'] = $this->envConf;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EditRoutineConfRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnvConf'])) {
            $model->envConf = $map['EnvConf'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
