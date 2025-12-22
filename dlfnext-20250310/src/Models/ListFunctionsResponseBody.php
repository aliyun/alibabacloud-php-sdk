<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class ListFunctionsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $functions;

    /**
     * @var string
     */
    public $nextPageToken;
    protected $_name = [
        'functions' => 'functions',
        'nextPageToken' => 'nextPageToken',
    ];

    public function validate()
    {
        if (\is_array($this->functions)) {
            Model::validateArray($this->functions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->functions) {
            if (\is_array($this->functions)) {
                $res['functions'] = [];
                $n1 = 0;
                foreach ($this->functions as $item1) {
                    $res['functions'][$n1] = $item1;
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
        if (isset($map['functions'])) {
            if (!empty($map['functions'])) {
                $model->functions = [];
                $n1 = 0;
                foreach ($map['functions'] as $item1) {
                    $model->functions[$n1] = $item1;
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
