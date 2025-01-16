<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Tea\Model;

class ListTextbookAssistantBooksRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example tc_197bf5bb81889cc79eb51ae9b8c0cea3
     *
     * @var string
     */
    public $authToken;

    /**
     * @example 231698
     *
     * @var string
     */
    public $bookId;

    /**
     * @example 1
     *
     * @var string
     */
    public $grade;

    /**
     * @example 20
     *
     * @var string
     */
    public $maxResults;

    /**
     * @example 1
     *
     * @var string
     */
    public $page;

    /**
     * @var string
     */
    public $version;

    /**
     * @example 1
     *
     * @var string
     */
    public $volume;
    protected $_name = [
        'authToken'  => 'authToken',
        'bookId'     => 'bookId',
        'grade'      => 'grade',
        'maxResults' => 'maxResults',
        'page'       => 'page',
        'version'    => 'version',
        'volume'     => 'volume',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ListTextbookAssistantBooksRequest
     */
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
