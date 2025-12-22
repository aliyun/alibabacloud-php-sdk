<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class ListViewsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var string[]
     */
    public $views;
    protected $_name = [
        'nextPageToken' => 'nextPageToken',
        'views' => 'views',
    ];

    public function validate()
    {
        if (\is_array($this->views)) {
            Model::validateArray($this->views);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextPageToken) {
            $res['nextPageToken'] = $this->nextPageToken;
        }

        if (null !== $this->views) {
            if (\is_array($this->views)) {
                $res['views'] = [];
                $n1 = 0;
                foreach ($this->views as $item1) {
                    $res['views'][$n1] = $item1;
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
        if (isset($map['nextPageToken'])) {
            $model->nextPageToken = $map['nextPageToken'];
        }

        if (isset($map['views'])) {
            if (!empty($map['views'])) {
                $model->views = [];
                $n1 = 0;
                foreach ($map['views'] as $item1) {
                    $model->views[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
