<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListAllSwimmingLanesResponseBody\data\mseGatewayEntryRule\routes;

use AlibabaCloud\SDK\Sae\V20190506\Models\ListAllSwimmingLanesResponseBody\data\mseGatewayEntryRule\routes\routePredicate\pathPredicate;
use AlibabaCloud\Tea\Model;

class routePredicate extends Model
{
    /**
     * @var pathPredicate
     */
    public $pathPredicate;
    protected $_name = [
        'pathPredicate' => 'PathPredicate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pathPredicate) {
            $res['PathPredicate'] = null !== $this->pathPredicate ? $this->pathPredicate->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routePredicate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PathPredicate'])) {
            $model->pathPredicate = pathPredicate::fromMap($map['PathPredicate']);
        }

        return $model;
    }
}
