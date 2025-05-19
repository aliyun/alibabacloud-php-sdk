<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeSwimmingLaneResponseBody\data\mseGatewayEntryRule\routes;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeSwimmingLaneResponseBody\data\mseGatewayEntryRule\routes\routePredicate\pathPredicate;

class routePredicate extends Model
{
    /**
     * @var pathPredicate
     */
    public $pathPredicate;
    protected $_name = [
        'pathPredicate' => 'PathPredicate',
    ];

    public function validate()
    {
        if (null !== $this->pathPredicate) {
            $this->pathPredicate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pathPredicate) {
            $res['PathPredicate'] = null !== $this->pathPredicate ? $this->pathPredicate->toArray($noStream) : $this->pathPredicate;
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
        if (isset($map['PathPredicate'])) {
            $model->pathPredicate = pathPredicate::fromMap($map['PathPredicate']);
        }

        return $model;
    }
}
