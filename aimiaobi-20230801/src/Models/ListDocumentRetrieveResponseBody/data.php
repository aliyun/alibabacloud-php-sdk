<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListDocumentRetrieveResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $essay;

    /**
     * @var string
     */
    public $issuingAuthority;

    /**
     * @var string
     */
    public $link;

    /**
     * @var string
     */
    public $publicationDate;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'essay' => 'Essay',
        'issuingAuthority' => 'IssuingAuthority',
        'link' => 'Link',
        'publicationDate' => 'PublicationDate',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->essay) {
            $res['Essay'] = $this->essay;
        }

        if (null !== $this->issuingAuthority) {
            $res['IssuingAuthority'] = $this->issuingAuthority;
        }

        if (null !== $this->link) {
            $res['Link'] = $this->link;
        }

        if (null !== $this->publicationDate) {
            $res['PublicationDate'] = $this->publicationDate;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['Essay'])) {
            $model->essay = $map['Essay'];
        }

        if (isset($map['IssuingAuthority'])) {
            $model->issuingAuthority = $map['IssuingAuthority'];
        }

        if (isset($map['Link'])) {
            $model->link = $map['Link'];
        }

        if (isset($map['PublicationDate'])) {
            $model->publicationDate = $map['PublicationDate'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
