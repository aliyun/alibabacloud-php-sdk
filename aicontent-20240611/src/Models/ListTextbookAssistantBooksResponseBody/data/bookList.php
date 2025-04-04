<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBooksResponseBody\data;

use AlibabaCloud\Dara\Model;

class bookList extends Model
{
    /**
     * @var string
     */
    public $author;

    /**
     * @var string
     */
    public $bookId;

    /**
     * @var string
     */
    public $bookName;

    /**
     * @var string
     */
    public $coverImage;

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

    /**
     * @var string
     */
    public $volume;
    protected $_name = [
        'author' => 'author',
        'bookId' => 'bookId',
        'bookName' => 'bookName',
        'coverImage' => 'coverImage',
        'edition' => 'edition',
        'grade' => 'grade',
        'impression' => 'impression',
        'isbn' => 'isbn',
        'publisher' => 'publisher',
        'subject' => 'subject',
        'version' => 'version',
        'volume' => 'volume',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->author) {
            $res['author'] = $this->author;
        }

        if (null !== $this->bookId) {
            $res['bookId'] = $this->bookId;
        }

        if (null !== $this->bookName) {
            $res['bookName'] = $this->bookName;
        }

        if (null !== $this->coverImage) {
            $res['coverImage'] = $this->coverImage;
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

        if (null !== $this->volume) {
            $res['volume'] = $this->volume;
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
        if (isset($map['author'])) {
            $model->author = $map['author'];
        }

        if (isset($map['bookId'])) {
            $model->bookId = $map['bookId'];
        }

        if (isset($map['bookName'])) {
            $model->bookName = $map['bookName'];
        }

        if (isset($map['coverImage'])) {
            $model->coverImage = $map['coverImage'];
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

        if (isset($map['volume'])) {
            $model->volume = $map['volume'];
        }

        return $model;
    }
}
