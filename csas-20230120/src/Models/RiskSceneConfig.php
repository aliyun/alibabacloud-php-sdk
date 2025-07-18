<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class RiskSceneConfig extends Model
{
    /**
     * @var string[]
     */
    public $detectChannel;

    /**
     * @var string[]
     */
    public $officeChannel;
    protected $_name = [
        'detectChannel' => 'DetectChannel',
        'officeChannel' => 'OfficeChannel',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->detectChannel) {
            $res['DetectChannel'] = $this->detectChannel;
        }
        if (null !== $this->officeChannel) {
            $res['OfficeChannel'] = $this->officeChannel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RiskSceneConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetectChannel'])) {
            if (!empty($map['DetectChannel'])) {
                $model->detectChannel = $map['DetectChannel'];
            }
        }
        if (isset($map['OfficeChannel'])) {
            if (!empty($map['OfficeChannel'])) {
                $model->officeChannel = $map['OfficeChannel'];
            }
        }

        return $model;
    }
}
