<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateEnvironmentRequest\advancedConfigs;
use AlibabaCloud\Tea\Model;

class UpdateEnvironmentRequest extends Model
{
    /**
     * @var advancedConfigs
     */
    public $advancedConfigs;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $vendorConfig;
    protected $_name = [
        'advancedConfigs' => 'advancedConfigs',
        'description'     => 'description',
        'location'        => 'location',
        'vendorConfig'    => 'vendorConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advancedConfigs) {
            $res['advancedConfigs'] = null !== $this->advancedConfigs ? $this->advancedConfigs->toMap() : null;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->location) {
            $res['location'] = $this->location;
        }
        if (null !== $this->vendorConfig) {
            $res['vendorConfig'] = $this->vendorConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEnvironmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['advancedConfigs'])) {
            $model->advancedConfigs = advancedConfigs::fromMap($map['advancedConfigs']);
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['location'])) {
            $model->location = $map['location'];
        }
        if (isset($map['vendorConfig'])) {
            $model->vendorConfig = $map['vendorConfig'];
        }

        return $model;
    }
}
