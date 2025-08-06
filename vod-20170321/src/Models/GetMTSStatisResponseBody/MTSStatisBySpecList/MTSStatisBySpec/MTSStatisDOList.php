<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMTSStatisResponseBody\MTSStatisBySpecList\MTSStatisBySpec;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMTSStatisResponseBody\MTSStatisBySpecList\MTSStatisBySpec\MTSStatisDOList\MTSStatisDO;

class MTSStatisDOList extends Model
{
    /**
     * @var MTSStatisDO[]
     */
    public $MTSStatisDO;
    protected $_name = [
        'MTSStatisDO' => 'MTSStatisDO',
    ];

    public function validate()
    {
        if (\is_array($this->MTSStatisDO)) {
            Model::validateArray($this->MTSStatisDO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->MTSStatisDO) {
            if (\is_array($this->MTSStatisDO)) {
                $res['MTSStatisDO'] = [];
                $n1 = 0;
                foreach ($this->MTSStatisDO as $item1) {
                    $res['MTSStatisDO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MTSStatisDO'])) {
            if (!empty($map['MTSStatisDO'])) {
                $model->MTSStatisDO = [];
                $n1 = 0;
                foreach ($map['MTSStatisDO'] as $item1) {
                    $model->MTSStatisDO[$n1] = MTSStatisDO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
