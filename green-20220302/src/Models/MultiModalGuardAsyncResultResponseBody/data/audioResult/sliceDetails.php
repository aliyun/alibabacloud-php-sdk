<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\MultiModalGuardAsyncResultResponseBody\data\audioResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\MultiModalGuardAsyncResultResponseBody\data\audioResult\sliceDetails\detail;

class sliceDetails extends Model
{
    /**
     * @var detail[]
     */
    public $detail;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'detail' => 'Detail',
        'endTime' => 'EndTime',
        'startTime' => 'StartTime',
        'suggestion' => 'Suggestion',
        'text' => 'Text',
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

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
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

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
