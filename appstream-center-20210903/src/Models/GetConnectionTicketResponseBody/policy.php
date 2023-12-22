<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\GetConnectionTicketResponseBody;

use AlibabaCloud\Tea\Model;

class policy extends Model
{
    /**
     * @var string
     */
    public $resolutionAdaptive;

    /**
     * @var int
     */
    public $resolutionHeight;

    /**
     * @var int
     */
    public $resolutionWidth;
    protected $_name = [
        'resolutionAdaptive' => 'ResolutionAdaptive',
        'resolutionHeight'   => 'ResolutionHeight',
        'resolutionWidth'    => 'ResolutionWidth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resolutionAdaptive) {
            $res['ResolutionAdaptive'] = $this->resolutionAdaptive;
        }
        if (null !== $this->resolutionHeight) {
            $res['ResolutionHeight'] = $this->resolutionHeight;
        }
        if (null !== $this->resolutionWidth) {
            $res['ResolutionWidth'] = $this->resolutionWidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResolutionAdaptive'])) {
            $model->resolutionAdaptive = $map['ResolutionAdaptive'];
        }
        if (isset($map['ResolutionHeight'])) {
            $model->resolutionHeight = $map['ResolutionHeight'];
        }
        if (isset($map['ResolutionWidth'])) {
            $model->resolutionWidth = $map['ResolutionWidth'];
        }

        return $model;
    }
}
