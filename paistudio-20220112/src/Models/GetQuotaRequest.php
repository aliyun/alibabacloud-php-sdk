<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class GetQuotaRequest extends Model
{
    /**
     * @var bool
     */
    public $verbose;

    /**
     * @var bool
     */
    public $withNodeMeta;
    protected $_name = [
        'verbose' => 'Verbose',
        'withNodeMeta' => 'WithNodeMeta',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->verbose) {
            $res['Verbose'] = $this->verbose;
        }

        if (null !== $this->withNodeMeta) {
            $res['WithNodeMeta'] = $this->withNodeMeta;
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
        if (isset($map['Verbose'])) {
            $model->verbose = $map['Verbose'];
        }

        if (isset($map['WithNodeMeta'])) {
            $model->withNodeMeta = $map['WithNodeMeta'];
        }

        return $model;
    }
}
