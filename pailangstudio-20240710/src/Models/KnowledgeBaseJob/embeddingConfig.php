<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models\KnowledgeBaseJob;

use AlibabaCloud\Dara\Model;

class embeddingConfig extends Model
{
    /**
     * @var int
     */
    public $batchSize;

    /**
     * @var int
     */
    public $concurrency;
    protected $_name = [
        'batchSize' => 'BatchSize',
        'concurrency' => 'Concurrency',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchSize) {
            $res['BatchSize'] = $this->batchSize;
        }

        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
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
        if (isset($map['BatchSize'])) {
            $model->batchSize = $map['BatchSize'];
        }

        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }

        return $model;
    }
}
