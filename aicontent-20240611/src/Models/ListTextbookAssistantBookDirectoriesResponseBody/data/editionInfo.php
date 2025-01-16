<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBookDirectoriesResponseBody\data;

use AlibabaCloud\Tea\Model;

class editionInfo extends Model
{
    /**
     * @example 55857
     *
     * @var string
     */
    public $bookId;

    /**
     * @example 1
     *
     * @var string
     */
    public $bookVolume;

    /**
     * @example 2010-1(2)
     *
     * @var string
     */
    public $edition;

    /**
     * @example 3
     *
     * @var string
     */
    public $grade;

    /**
     * @example 2019-1(10)
     *
     * @var string
     */
    public $impression;

    /**
     * @example 9787544413695
     *
     * @var string
     */
    public $isbn;

    /**
     * @var string
     */
    public $publisher;

    /**
     * @example ENGLISH
     *
     * @var string
     */
    public $subject;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'bookId'     => 'bookId',
        'bookVolume' => 'bookVolume',
        'edition'    => 'edition',
        'grade'      => 'grade',
        'impression' => 'impression',
        'isbn'       => 'isbn',
        'publisher'  => 'publisher',
        'subject'    => 'subject',
        'version'    => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bookId) {
            $res['bookId'] = $this->bookId;
        }
        if (null !== $this->bookVolume) {
            $res['bookVolume'] = $this->bookVolume;
        }
        if (null !== $this->edition) {
            $res['edition'] = $this->edition;
        }
        if (null !== $this->grade) {
            $res['grade'] = $this->grade;
        }
        if (null !== $this->impression) {
            $res['impression'] = $this->impression;
        }
        if (null !== $this->isbn) {
            $res['isbn'] = $this->isbn;
        }
        if (null !== $this->publisher) {
            $res['publisher'] = $this->publisher;
        }
        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return editionInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bookId'])) {
            $model->bookId = $map['bookId'];
        }
        if (isset($map['bookVolume'])) {
            $model->bookVolume = $map['bookVolume'];
        }
        if (isset($map['edition'])) {
            $model->edition = $map['edition'];
        }
        if (isset($map['grade'])) {
            $model->grade = $map['grade'];
        }
        if (isset($map['impression'])) {
            $model->impression = $map['impression'];
        }
        if (isset($map['isbn'])) {
            $model->isbn = $map['isbn'];
        }
        if (isset($map['publisher'])) {
            $model->publisher = $map['publisher'];
        }
        if (isset($map['subject'])) {
            $model->subject = $map['subject'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
