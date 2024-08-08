<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CommitFileRequest;

use AlibabaCloud\SDK\Aliding\V20230426\Models\CommitFileRequest\option\appProperties;
use AlibabaCloud\Tea\Model;

class option extends Model
{
    /**
     * @var appProperties[]
     */
    public $appProperties;

    /**
     * @example AUTO_RENAME
     *
     * @var string
     */
    public $conflictStrategy;

    /**
     * @example false
     *
     * @var bool
     */
    public $convertToOnlineDoc;

    /**
     * @example DOC
     *
     * @var string
     */
    public $convertToOnlineDocTargetDocumentType;

    /**
     * @example 512
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'appProperties'                        => 'AppProperties',
        'conflictStrategy'                     => 'ConflictStrategy',
        'convertToOnlineDoc'                   => 'ConvertToOnlineDoc',
        'convertToOnlineDocTargetDocumentType' => 'ConvertToOnlineDocTargetDocumentType',
        'size'                                 => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appProperties) {
            $res['AppProperties'] = [];
            if (null !== $this->appProperties && \is_array($this->appProperties)) {
                $n = 0;
                foreach ($this->appProperties as $item) {
                    $res['AppProperties'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return option
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppProperties'])) {
            if (!empty($map['AppProperties'])) {
                $model->appProperties = [];
                $n                    = 0;
                foreach ($map['AppProperties'] as $item) {
                    $model->appProperties[$n++] = null !== $item ? appProperties::fromMap($item) : $item;
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
