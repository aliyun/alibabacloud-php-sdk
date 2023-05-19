<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class EditRoutineConfShrinkRequest extends Model
{
    /**
     * @description The configurations of the specified environment.
     *
     * @example the description of this routine
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the routine. The name must be unique among the routines that belong to the same Alibaba Cloud account.
     *
     * @example {"staging":{"SpecName":"50ms","AllowedHosts":["test-a.alicdn.com","test-b.alicdn.com"]},"production":{"SpecName":"50ms","AllowedHosts":["test-c.alicdn.com","test-d.alicdn.com"]},"presetCanaryZhejiang":{"SpecName":"100ms","AllowedHosts":["test-e.alicdn.com","test-f.alicdn.com"]},"presetCanaryBeijing":{"SpecName":"5ms","AllowedHosts":["test-g.alicdn.com","test-h.alicdn.com"]},"presetCanaryNotExist":{"SpecName":"5ms","CodeRev":"1622446907645949975","AllowedHosts":["error hosts"]}}
     *
     * @var string
     */
    public $envConfShrink;

    /**
     * @description >
     *   This operation modifies only the specified configurations. Other configurations remain unchanged.
     *   If you want to delete a setting, delete the parameter value.
     *   This operation can add canary release environments. Make sure that the environment names comply with the naming rules. Otherwise, you will fail to add the environments.
     *   Dynamic Route for CDN (DCDN) provides 35 canary release environments. Among these environments, 34 are deployed in China and 1 is deployed outside China. The canary release environments are:
     *   Outside China: presetCanaryOverseas.
     *   In China: The 34 canary release environments are named in the format of presetCanaryXX. For example, presetCanaryBeijing represents the canary release environment in Beijing. A canary release environment is in each of the following regions: Anhui, Beijing, Chongqing, Fujian, Gansu, Guangdong, Guangxi, Guizhou, Hainan, Hebei, Heilongjiang, Henan, Hong Kong, Hubei, Hunan, Jiangsu, Jiangxi, Jilin, Liaoning, Macao, Neimenggu, Ningxia, Qinghai, Shaanxi, Shandong, Shanghai, Shanxi, Sichuan, Taiwan, Tianjin, Xinjiang, Xizang, Yunan, and Zhejiang.
     *   You can call this operation up to 100 times per second per account.
     *
     * @example test-slc
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'description'   => 'Description',
        'envConfShrink' => 'EnvConf',
        'name'          => 'Name',
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
        if (null !== $this->envConfShrink) {
            $res['EnvConf'] = $this->envConfShrink;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EditRoutineConfShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnvConf'])) {
            $model->envConfShrink = $map['EnvConf'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
