<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\UpdateQaLibraryRequest\parseQaResults;

class UpdateQaLibraryRequest extends Model
{
    /**
     * @var parseQaResults[]
     */
    public $parseQaResults;
    /**
     * @var string
     */
    public $qaLibraryId;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'parseQaResults' => 'parseQaResults',
        'qaLibraryId'    => 'qaLibraryId',
        'requestId'      => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->parseQaResults)) {
            Model::validateArray($this->parseQaResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parseQaResults) {
            if (\is_array($this->parseQaResults)) {
                $res['parseQaResults'] = [];
                $n1                    = 0;
                foreach ($this->parseQaResults as $item1) {
                    $res['parseQaResults'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->qaLibraryId) {
            $res['qaLibraryId'] = $this->qaLibraryId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['parseQaResults'])) {
            if (!empty($map['parseQaResults'])) {
                $model->parseQaResults = [];
                $n1                    = 0;
                foreach ($map['parseQaResults'] as $item1) {
                    $model->parseQaResults[$n1++] = parseQaResults::fromMap($item1);
                }
            }
        }

        if (isset($map['qaLibraryId'])) {
            $model->qaLibraryId = $map['qaLibraryId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
