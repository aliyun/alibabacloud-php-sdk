<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class CSVInput extends Model
{
    /**
     * @var bool
     */
    public $allowQuotedRecordDelimiter;

    /**
     * @var string
     */
    public $commentCharacter;

    /**
     * @var string
     */
    public $fieldDelimiter;

    /**
     * @var string
     */
    public $fileHeaderInfo;

    /**
     * @var string
     */
    public $quoteCharacter;

    /**
     * @var string
     */
    public $range;

    /**
     * @var string
     */
    public $recordDelimiter;
    protected $_name = [
        'allowQuotedRecordDelimiter' => 'AllowQuotedRecordDelimiter',
        'commentCharacter'           => 'CommentCharacter',
        'fieldDelimiter'             => 'FieldDelimiter',
        'fileHeaderInfo'             => 'FileHeaderInfo',
        'quoteCharacter'             => 'QuoteCharacter',
        'range'                      => 'Range',
        'recordDelimiter'            => 'RecordDelimiter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowQuotedRecordDelimiter) {
            $res['AllowQuotedRecordDelimiter'] = $this->allowQuotedRecordDelimiter;
        }
        if (null !== $this->commentCharacter) {
            $res['CommentCharacter'] = $this->commentCharacter;
        }
        if (null !== $this->fieldDelimiter) {
            $res['FieldDelimiter'] = $this->fieldDelimiter;
        }
        if (null !== $this->fileHeaderInfo) {
            $res['FileHeaderInfo'] = $this->fileHeaderInfo;
        }
        if (null !== $this->quoteCharacter) {
            $res['QuoteCharacter'] = $this->quoteCharacter;
        }
        if (null !== $this->range) {
            $res['Range'] = $this->range;
        }
        if (null !== $this->recordDelimiter) {
            $res['RecordDelimiter'] = $this->recordDelimiter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CSVInput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowQuotedRecordDelimiter'])) {
            $model->allowQuotedRecordDelimiter = $map['AllowQuotedRecordDelimiter'];
        }
        if (isset($map['CommentCharacter'])) {
            $model->commentCharacter = $map['CommentCharacter'];
        }
        if (isset($map['FieldDelimiter'])) {
            $model->fieldDelimiter = $map['FieldDelimiter'];
        }
        if (isset($map['FileHeaderInfo'])) {
            $model->fileHeaderInfo = $map['FileHeaderInfo'];
        }
        if (isset($map['QuoteCharacter'])) {
            $model->quoteCharacter = $map['QuoteCharacter'];
        }
        if (isset($map['Range'])) {
            $model->range = $map['Range'];
        }
        if (isset($map['RecordDelimiter'])) {
            $model->recordDelimiter = $map['RecordDelimiter'];
        }

        return $model;
    }
}
