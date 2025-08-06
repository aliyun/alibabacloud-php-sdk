<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMTSStatisResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMTSStatisResponseBody\MTSStatisBySpecList\MTSStatisBySpec;

class MTSStatisBySpecList extends Model
{
    /**
     * @var MTSStatisBySpec[]
     */
    public $MTSStatisBySpec;
    protected $_name = [
        'MTSStatisBySpec' => 'MTSStatisBySpec',
    ];

    public function validate()
    {
        if (\is_array($this->MTSStatisBySpec)) {
            Model::validateArray($this->MTSStatisBySpec);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->MTSStatisBySpec) {
            if (\is_array($this->MTSStatisBySpec)) {
                $res['MTSStatisBySpec'] = [];
                $n1 = 0;
                foreach ($this->MTSStatisBySpec as $item1) {
                    $res['MTSStatisBySpec'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MTSStatisBySpec'])) {
            if (!empty($map['MTSStatisBySpec'])) {
                $model->MTSStatisBySpec = [];
                $n1 = 0;
                foreach ($map['MTSStatisBySpec'] as $item1) {
                    $model->MTSStatisBySpec[$n1] = MTSStatisBySpec::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
