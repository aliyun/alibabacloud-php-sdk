<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo\tasks\executorPolicy;

use AlibabaCloud\Dara\Model;

class arraySpec extends Model
{
    /**
     * @var int
     */
    public $indexEnd;
    /**
     * @var int
     */
    public $indexStart;
    /**
     * @var int
     */
    public $indexStep;
    protected $_name = [
        'indexEnd'   => 'IndexEnd',
        'indexStart' => 'IndexStart',
        'indexStep'  => 'IndexStep',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->indexEnd) {
            $res['IndexEnd'] = $this->indexEnd;
        }

        if (null !== $this->indexStart) {
            $res['IndexStart'] = $this->indexStart;
        }

        if (null !== $this->indexStep) {
            $res['IndexStep'] = $this->indexStep;
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
        if (isset($map['IndexEnd'])) {
            $model->indexEnd = $map['IndexEnd'];
        }

        if (isset($map['IndexStart'])) {
            $model->indexStart = $map['IndexStart'];
        }

        if (isset($map['IndexStep'])) {
            $model->indexStep = $map['IndexStep'];
        }

        return $model;
    }
}
