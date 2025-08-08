<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class ListDatabasesResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $databases;

    /**
     * @var string
     */
    public $nextPageToken;
    protected $_name = [
        'databases' => 'databases',
        'nextPageToken' => 'nextPageToken',
    ];

    public function validate()
    {
        if (\is_array($this->databases)) {
            Model::validateArray($this->databases);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databases) {
            if (\is_array($this->databases)) {
                $res['databases'] = [];
                $n1 = 0;
                foreach ($this->databases as $item1) {
                    $res['databases'][$n1] = $item1;
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
        if (isset($map['databases'])) {
            if (!empty($map['databases'])) {
                $model->databases = [];
                $n1 = 0;
                foreach ($map['databases'] as $item1) {
                    $model->databases[$n1] = $item1;
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
