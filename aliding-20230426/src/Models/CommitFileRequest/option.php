<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CommitFileRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CommitFileRequest\option\appProperties;

class option extends Model
{
    /**
     * @var appProperties[]
     */
    public $appProperties;

    /**
     * @var string
     */
    public $conflictStrategy;

    /**
     * @var bool
     */
    public $convertToOnlineDoc;

    /**
     * @var string
     */
    public $convertToOnlineDocTargetDocumentType;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'appProperties' => 'AppProperties',
        'conflictStrategy' => 'ConflictStrategy',
        'convertToOnlineDoc' => 'ConvertToOnlineDoc',
        'convertToOnlineDocTargetDocumentType' => 'ConvertToOnlineDocTargetDocumentType',
        'size' => 'Size',
    ];

    public function validate()
    {
        if (\is_array($this->appProperties)) {
            Model::validateArray($this->appProperties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appProperties) {
            if (\is_array($this->appProperties)) {
                $res['AppProperties'] = [];
                $n1 = 0;
                foreach ($this->appProperties as $item1) {
                    $res['AppProperties'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->conflictStrategy) {
            $res['ConflictStrategy'] = $this->conflictStrategy;
        }

        if (null !== $this->convertToOnlineDoc) {
            $res['ConvertToOnlineDoc'] = $this->convertToOnlineDoc;
        }

        if (null !== $this->convertToOnlineDocTargetDocumentType) {
            $res['ConvertToOnlineDocTargetDocumentType'] = $this->convertToOnlineDocTargetDocumentType;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['AppProperties'])) {
            if (!empty($map['AppProperties'])) {
                $model->appProperties = [];
                $n1 = 0;
                foreach ($map['AppProperties'] as $item1) {
                    $model->appProperties[$n1++] = appProperties::fromMap($item1);
                }
            }
        }

        if (isset($map['ConflictStrategy'])) {
            $model->conflictStrategy = $map['ConflictStrategy'];
        }

        if (isset($map['ConvertToOnlineDoc'])) {
            $model->convertToOnlineDoc = $map['ConvertToOnlineDoc'];
        }

        if (isset($map['ConvertToOnlineDocTargetDocumentType'])) {
            $model->convertToOnlineDocTargetDocumentType = $map['ConvertToOnlineDocTargetDocumentType'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
