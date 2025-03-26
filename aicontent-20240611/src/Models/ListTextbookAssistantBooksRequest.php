<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ListTextbookAssistantBooksRequest extends Model
{
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $bookId;

    /**
     * @var string
     */
    public $grade;

    /**
     * @var string
     */
    public $maxResults;

    /**
     * @var string
     */
    public $page;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $volume;
    protected $_name = [
        'authToken' => 'authToken',
        'bookId' => 'bookId',
        'grade' => 'grade',
        'maxResults' => 'maxResults',
        'page' => 'page',
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
        if (null !== $this->authToken) {
            $res['authToken'] = $this->authToken;
        }

        if (null !== $this->bookId) {
            $res['bookId'] = $this->bookId;
        }

        if (null !== $this->grade) {
            $res['grade'] = $this->grade;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
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
        if (isset($map['authToken'])) {
            $model->authToken = $map['authToken'];
        }

        if (isset($map['bookId'])) {
            $model->bookId = $map['bookId'];
        }

        if (isset($map['grade'])) {
            $model->grade = $map['grade'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
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
