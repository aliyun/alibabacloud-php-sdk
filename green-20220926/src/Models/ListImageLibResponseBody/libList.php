<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\ListImageLibResponseBody;

use AlibabaCloud\Dara\Model;

class libList extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $freeInspection;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $imageNum;

    /**
     * @var string
     */
    public $libId;

    /**
     * @var string
     */
    public $libName;
    protected $_name = [
        'comment' => 'Comment',
        'freeInspection' => 'FreeInspection',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'imageNum' => 'ImageNum',
        'libId' => 'LibId',
        'libName' => 'LibName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->freeInspection) {
            $res['FreeInspection'] = $this->freeInspection;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->imageNum) {
            $res['ImageNum'] = $this->imageNum;
        }

        if (null !== $this->libId) {
            $res['LibId'] = $this->libId;
        }

        if (null !== $this->libName) {
            $res['LibName'] = $this->libName;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['FreeInspection'])) {
            $model->freeInspection = $map['FreeInspection'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['ImageNum'])) {
            $model->imageNum = $map['ImageNum'];
        }

        if (isset($map['LibId'])) {
            $model->libId = $map['LibId'];
        }

        if (isset($map['LibName'])) {
            $model->libName = $map['LibName'];
        }

        return $model;
    }
}
