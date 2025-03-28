<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDataCheckTableDiffDetailsResponseBody;

use AlibabaCloud\Dara\Model;

class diffDetails extends Model
{
    /**
     * @var string
     */
    public $diff;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'diff' => 'Diff',
        'gmtCreated' => 'GmtCreated',
        'id' => 'Id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diff) {
            $res['Diff'] = $this->diff;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['Diff'])) {
            $model->diff = $map['Diff'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
