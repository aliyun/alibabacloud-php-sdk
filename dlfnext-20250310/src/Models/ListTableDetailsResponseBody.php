<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class ListTableDetailsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var Table[]
     */
    public $tableDetails;
    protected $_name = [
        'nextPageToken' => 'nextPageToken',
        'tableDetails' => 'tableDetails',
    ];

    public function validate()
    {
        if (\is_array($this->tableDetails)) {
            Model::validateArray($this->tableDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextPageToken) {
            $res['nextPageToken'] = $this->nextPageToken;
        }

        if (null !== $this->tableDetails) {
            if (\is_array($this->tableDetails)) {
                $res['tableDetails'] = [];
                $n1 = 0;
                foreach ($this->tableDetails as $item1) {
                    $res['tableDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['tableDetails'])) {
            if (!empty($map['tableDetails'])) {
                $model->tableDetails = [];
                $n1 = 0;
                foreach ($map['tableDetails'] as $item1) {
                    $model->tableDetails[$n1] = Table::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
