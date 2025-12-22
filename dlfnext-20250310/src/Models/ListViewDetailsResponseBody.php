<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class ListViewDetailsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var View[]
     */
    public $viewDetails;
    protected $_name = [
        'nextPageToken' => 'nextPageToken',
        'viewDetails' => 'viewDetails',
    ];

    public function validate()
    {
        if (\is_array($this->viewDetails)) {
            Model::validateArray($this->viewDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextPageToken) {
            $res['nextPageToken'] = $this->nextPageToken;
        }

        if (null !== $this->viewDetails) {
            if (\is_array($this->viewDetails)) {
                $res['viewDetails'] = [];
                $n1 = 0;
                foreach ($this->viewDetails as $item1) {
                    $res['viewDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['viewDetails'])) {
            if (!empty($map['viewDetails'])) {
                $model->viewDetails = [];
                $n1 = 0;
                foreach ($map['viewDetails'] as $item1) {
                    $model->viewDetails[$n1] = View::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
