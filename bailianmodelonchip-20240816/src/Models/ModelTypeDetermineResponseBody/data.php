<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\ModelTypeDetermineResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $followUp;

    /**
     * @var string
     */
    public $rewriteText;

    /**
     * @var bool
     */
    public $vl;
    protected $_name = [
        'followUp' => 'followUp',
        'rewriteText' => 'rewriteText',
        'vl' => 'vl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->followUp) {
            $res['followUp'] = $this->followUp;
        }

        if (null !== $this->rewriteText) {
            $res['rewriteText'] = $this->rewriteText;
        }

        if (null !== $this->vl) {
            $res['vl'] = $this->vl;
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
        if (isset($map['followUp'])) {
            $model->followUp = $map['followUp'];
        }

        if (isset($map['rewriteText'])) {
            $model->rewriteText = $map['rewriteText'];
        }

        if (isset($map['vl'])) {
            $model->vl = $map['vl'];
        }

        return $model;
    }
}
