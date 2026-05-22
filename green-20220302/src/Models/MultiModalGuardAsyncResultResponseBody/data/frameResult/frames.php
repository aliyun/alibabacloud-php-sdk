<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\MultiModalGuardAsyncResultResponseBody\data\frameResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\MultiModalGuardAsyncResultResponseBody\data\frameResult\frames\detail;

class frames extends Model
{
    /**
     * @var detail[]
     */
    public $detail;

    /**
     * @var float
     */
    public $offset;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'detail' => 'Detail',
        'offset' => 'Offset',
        'suggestion' => 'Suggestion',
        'timestamp' => 'Timestamp',
        'url' => 'Url',
    ];

    public function validate()
    {
        if (\is_array($this->detail)) {
            Model::validateArray($this->detail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detail) {
            if (\is_array($this->detail)) {
                $res['Detail'] = [];
                $n1 = 0;
                foreach ($this->detail as $item1) {
                    $res['Detail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }

        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['Detail'])) {
            if (!empty($map['Detail'])) {
                $model->detail = [];
                $n1 = 0;
                foreach ($map['Detail'] as $item1) {
                    $model->detail[$n1] = detail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }

        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
