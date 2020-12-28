<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTrendTopicInputTpsResponseBody;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTrendTopicInputTpsResponseBody\data\records;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var records[]
     */
    public $records;

    /**
     * @var string
     */
    public $XUnit;

    /**
     * @var string
     */
    public $YUnit;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'records' => 'Records',
        'XUnit'   => 'XUnit',
        'YUnit'   => 'YUnit',
        'title'   => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->records) {
            $res['Records'] = [];
            if (null !== $this->records && \is_array($this->records)) {
                $n = 0;
                foreach ($this->records as $item) {
                    $res['Records'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->XUnit) {
            $res['XUnit'] = $this->XUnit;
        }
        if (null !== $this->YUnit) {
            $res['YUnit'] = $this->YUnit;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Records'])) {
            if (!empty($map['Records'])) {
                $model->records = [];
                $n              = 0;
                foreach ($map['Records'] as $item) {
                    $model->records[$n++] = null !== $item ? records::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['XUnit'])) {
            $model->XUnit = $map['XUnit'];
        }
        if (isset($map['YUnit'])) {
            $model->YUnit = $map['YUnit'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
