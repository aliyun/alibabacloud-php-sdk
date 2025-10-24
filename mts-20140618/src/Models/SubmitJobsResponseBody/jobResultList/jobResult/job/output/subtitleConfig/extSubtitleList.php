<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitJobsResponseBody\jobResultList\jobResult\job\output\subtitleConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitJobsResponseBody\jobResultList\jobResult\job\output\subtitleConfig\extSubtitleList\extSubtitle;

class extSubtitleList extends Model
{
    /**
     * @var extSubtitle[]
     */
    public $extSubtitle;
    protected $_name = [
        'extSubtitle' => 'ExtSubtitle',
    ];

    public function validate()
    {
        if (\is_array($this->extSubtitle)) {
            Model::validateArray($this->extSubtitle);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extSubtitle) {
            if (\is_array($this->extSubtitle)) {
                $res['ExtSubtitle'] = [];
                $n1 = 0;
                foreach ($this->extSubtitle as $item1) {
                    $res['ExtSubtitle'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ExtSubtitle'])) {
            if (!empty($map['ExtSubtitle'])) {
                $model->extSubtitle = [];
                $n1 = 0;
                foreach ($map['ExtSubtitle'] as $item1) {
                    $model->extSubtitle[$n1] = extSubtitle::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
