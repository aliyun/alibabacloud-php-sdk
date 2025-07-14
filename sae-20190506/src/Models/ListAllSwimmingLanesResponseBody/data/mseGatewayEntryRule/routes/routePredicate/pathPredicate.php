<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListAllSwimmingLanesResponseBody\data\mseGatewayEntryRule\routes\routePredicate;

use AlibabaCloud\Tea\Model;

class pathPredicate extends Model
{
    /**
     * @example /Path
     *
     * @var string
     */
    public $path;

    /**
     * @example Header
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'path' => 'path',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pathPredicate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
