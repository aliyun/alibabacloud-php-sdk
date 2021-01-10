<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class GetAIActionConfigRequest extends Model
{
    /**
     * @var string
     */
    public $apiProduct;

    /**
     * @var string
     */
    public $apiRevision;

    /**
     * @var string
     */
    public $algo;

    /**
     * @var string
     */
    public $algoAction;
    protected $_name = [
        'apiProduct'  => 'ApiProduct',
        'apiRevision' => 'ApiRevision',
        'algo'        => 'Algo',
        'algoAction'  => 'AlgoAction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProduct) {
            $res['ApiProduct'] = $this->apiProduct;
        }
        if (null !== $this->apiRevision) {
            $res['ApiRevision'] = $this->apiRevision;
        }
        if (null !== $this->algo) {
            $res['Algo'] = $this->algo;
        }
        if (null !== $this->algoAction) {
            $res['AlgoAction'] = $this->algoAction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAIActionConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['ApiRevision'])) {
            $model->apiRevision = $map['ApiRevision'];
        }
        if (isset($map['Algo'])) {
            $model->algo = $map['Algo'];
        }
        if (isset($map['AlgoAction'])) {
            $model->algoAction = $map['AlgoAction'];
        }

        return $model;
    }
}
