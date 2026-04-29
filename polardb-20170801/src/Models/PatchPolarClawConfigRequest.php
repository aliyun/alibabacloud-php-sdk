<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class PatchPolarClawConfigRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var mixed[]
     */
    public $configPatch;

    /**
     * @var bool
     */
    public $restart;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'configPatch' => 'ConfigPatch',
        'restart' => 'Restart',
    ];

    public function validate()
    {
        if (\is_array($this->configPatch)) {
            Model::validateArray($this->configPatch);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->configPatch) {
            if (\is_array($this->configPatch)) {
                $res['ConfigPatch'] = [];
                foreach ($this->configPatch as $key1 => $value1) {
                    $res['ConfigPatch'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->restart) {
            $res['Restart'] = $this->restart;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['ConfigPatch'])) {
            if (!empty($map['ConfigPatch'])) {
                $model->configPatch = [];
                foreach ($map['ConfigPatch'] as $key1 => $value1) {
                    $model->configPatch[$key1] = $value1;
                }
            }
        }

        if (isset($map['Restart'])) {
            $model->restart = $map['Restart'];
        }

        return $model;
    }
}
