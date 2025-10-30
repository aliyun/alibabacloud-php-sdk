<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryKnowledgeBasesContentRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryKnowledgeBasesContentRequest\mergeMethodArgs\rrf;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryKnowledgeBasesContentRequest\mergeMethodArgs\weight;

class mergeMethodArgs extends Model
{
    /**
     * @var rrf
     */
    public $rrf;

    /**
     * @var weight
     */
    public $weight;
    protected $_name = [
        'rrf' => 'Rrf',
        'weight' => 'Weight',
    ];

    public function validate()
    {
        if (null !== $this->rrf) {
            $this->rrf->validate();
        }
        if (null !== $this->weight) {
            $this->weight->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rrf) {
            $res['Rrf'] = null !== $this->rrf ? $this->rrf->toArray($noStream) : $this->rrf;
        }

        if (null !== $this->weight) {
            $res['Weight'] = null !== $this->weight ? $this->weight->toArray($noStream) : $this->weight;
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
        if (isset($map['Rrf'])) {
            $model->rrf = rrf::fromMap($map['Rrf']);
        }

        if (isset($map['Weight'])) {
            $model->weight = weight::fromMap($map['Weight']);
        }

        return $model;
    }
}
