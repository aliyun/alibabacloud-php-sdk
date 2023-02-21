<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcJusticeCourtNoticeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $court;

    /**
     * @var string
     */
    public $party;

    /**
     * @example 2021-04-25
     *
     * @var string
     */
    public $publicDate;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'content'    => 'Content',
        'court'      => 'Court',
        'party'      => 'Party',
        'publicDate' => 'PublicDate',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->court) {
            $res['Court'] = $this->court;
        }
        if (null !== $this->party) {
            $res['Party'] = $this->party;
        }
        if (null !== $this->publicDate) {
            $res['PublicDate'] = $this->publicDate;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Court'])) {
            $model->court = $map['Court'];
        }
        if (isset($map['Party'])) {
            $model->party = $map['Party'];
        }
        if (isset($map['PublicDate'])) {
            $model->publicDate = $map['PublicDate'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
