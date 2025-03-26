<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBookDirectoriesResponseBody\data;

use AlibabaCloud\Dara\Model;

class editionInfo extends Model
{
    /**
     * @var string
     */
    public $bookId;

    /**
     * @var string
     */
    public $bookVolume;

    /**
     * @var string
     */
    public $edition;

    /**
     * @var string
     */
    public $grade;

    /**
     * @var string
     */
    public $impression;

    /**
     * @var string
     */
    public $isbn;

    /**
     * @var string
     */
    public $publisher;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'bookId' => 'bookId',
        'bookVolume' => 'bookVolume',
        'edition' => 'edition',
        'grade' => 'grade',
        'impression' => 'impression',
        'isbn' => 'isbn',
        'publisher' => 'publisher',
        'subject' => 'subject',
        'version' => 'version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
