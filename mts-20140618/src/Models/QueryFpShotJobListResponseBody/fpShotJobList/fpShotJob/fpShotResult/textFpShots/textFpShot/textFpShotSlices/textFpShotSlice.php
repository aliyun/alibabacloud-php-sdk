<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob\fpShotResult\textFpShots\textFpShot\textFpShotSlices;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob\fpShotResult\textFpShots\textFpShot\textFpShotSlices\textFpShotSlice\inputFragment;

class textFpShotSlice extends Model
{
    /**
     * @var string
     */
    public $duplicationText;

    /**
     * @var inputFragment
     */
    public $inputFragment;

    /**
     * @var string
     */
    public $inputText;

    /**
     * @var string
     */
    public $similarity;
    protected $_name = [
        'duplicationText' => 'DuplicationText',
        'inputFragment' => 'InputFragment',
        'inputText' => 'InputText',
        'similarity' => 'Similarity',
    ];

    public function validate()
    {
        if (null !== $this->inputFragment) {
            $this->inputFragment->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duplicationText) {
            $res['DuplicationText'] = $this->duplicationText;
        }

        if (null !== $this->inputFragment) {
            $res['InputFragment'] = null !== $this->inputFragment ? $this->inputFragment->toArray($noStream) : $this->inputFragment;
        }

        if (null !== $this->inputText) {
            $res['InputText'] = $this->inputText;
        }

        if (null !== $this->similarity) {
            $res['Similarity'] = $this->similarity;
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
        if (isset($map['DuplicationText'])) {
            $model->duplicationText = $map['DuplicationText'];
        }

        if (isset($map['InputFragment'])) {
            $model->inputFragment = inputFragment::fromMap($map['InputFragment']);
        }

        if (isset($map['InputText'])) {
            $model->inputText = $map['InputText'];
        }

        if (isset($map['Similarity'])) {
            $model->similarity = $map['Similarity'];
        }

        return $model;
    }
}
