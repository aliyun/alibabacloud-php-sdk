<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class ListDatabaseDetailsResponseBody extends Model
{
    /**
     * @var Database[]
     */
    public $databaseDetails;

    /**
     * @var string
     */
    public $nextPageToken;
    protected $_name = [
        'databaseDetails' => 'databaseDetails',
        'nextPageToken' => 'nextPageToken',
    ];

    public function validate()
    {
        if (\is_array($this->databaseDetails)) {
            Model::validateArray($this->databaseDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databaseDetails) {
            if (\is_array($this->databaseDetails)) {
                $res['databaseDetails'] = [];
                $n1 = 0;
                foreach ($this->databaseDetails as $item1) {
                    $res['databaseDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextPageToken) {
            $res['nextPageToken'] = $this->nextPageToken;
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
        if (isset($map['databaseDetails'])) {
            if (!empty($map['databaseDetails'])) {
                $model->databaseDetails = [];
                $n1 = 0;
                foreach ($map['databaseDetails'] as $item1) {
                    $model->databaseDetails[$n1] = Database::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['nextPageToken'])) {
            $model->nextPageToken = $map['nextPageToken'];
        }

        return $model;
    }
}
