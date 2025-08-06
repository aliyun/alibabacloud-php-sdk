<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMTSStatisResponseBody\MTSStatisBySpecList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMTSStatisResponseBody\MTSStatisBySpecList\MTSStatisBySpec\MTSStatisDOList;

class MTSStatisBySpec extends Model
{
    /**
     * @var MTSStatisDOList
     */
    public $MTSStatisDOList;

    /**
     * @var string
     */
    public $specification;
    protected $_name = [
        'MTSStatisDOList' => 'MTSStatisDOList',
        'specification' => 'Specification',
    ];

    public function validate()
    {
        if (null !== $this->MTSStatisDOList) {
            $this->MTSStatisDOList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->MTSStatisDOList) {
            $res['MTSStatisDOList'] = null !== $this->MTSStatisDOList ? $this->MTSStatisDOList->toArray($noStream) : $this->MTSStatisDOList;
        }

        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
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
        if (isset($map['MTSStatisDOList'])) {
            $model->MTSStatisDOList = MTSStatisDOList::fromMap($map['MTSStatisDOList']);
        }

        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }

        return $model;
    }
}
