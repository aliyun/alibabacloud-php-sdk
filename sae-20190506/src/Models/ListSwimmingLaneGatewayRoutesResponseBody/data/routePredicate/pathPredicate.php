<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListSwimmingLaneGatewayRoutesResponseBody\data\routePredicate;

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
        'path' => 'Path',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
