<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\CreateRenderingInstanceRequest;

use AlibabaCloud\Dara\Model;

class attributes extends Model
{
    /**
     * @var string
     */
    public $edgeMediaService;

    /**
     * @var string
     */
    public $inAccess;

    /**
     * @var string
     */
    public $outAccess;

    /**
     * @var string
     */
    public $zone;
    protected $_name = [
        'edgeMediaService' => 'EdgeMediaService',
        'inAccess' => 'InAccess',
        'outAccess' => 'OutAccess',
        'zone' => 'Zone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->edgeMediaService) {
            $res['EdgeMediaService'] = $this->edgeMediaService;
        }

        if (null !== $this->inAccess) {
            $res['InAccess'] = $this->inAccess;
        }

        if (null !== $this->outAccess) {
            $res['OutAccess'] = $this->outAccess;
        }

        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
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
        if (isset($map['EdgeMediaService'])) {
            $model->edgeMediaService = $map['EdgeMediaService'];
        }

        if (isset($map['InAccess'])) {
            $model->inAccess = $map['InAccess'];
        }

        if (isset($map['OutAccess'])) {
            $model->outAccess = $map['OutAccess'];
        }

        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }

        return $model;
    }
}
