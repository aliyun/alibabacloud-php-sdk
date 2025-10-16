<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeAclAppsRequest extends Model
{
    /**
     * @var string
     */
    public $aclType;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $popular;

    /**
     * @var string[]
     */
    public $protocols;
    protected $_name = [
        'aclType' => 'AclType',
        'lang' => 'Lang',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'popular' => 'Popular',
        'protocols' => 'Protocols',
    ];

    public function validate()
    {
        if (\is_array($this->protocols)) {
            Model::validateArray($this->protocols);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->popular) {
            $res['Popular'] = $this->popular;
        }

        if (null !== $this->protocols) {
            if (\is_array($this->protocols)) {
                $res['Protocols'] = [];
                $n1 = 0;
                foreach ($this->protocols as $item1) {
                    $res['Protocols'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Popular'])) {
            $model->popular = $map['Popular'];
        }

        if (isset($map['Protocols'])) {
            if (!empty($map['Protocols'])) {
                $model->protocols = [];
                $n1 = 0;
                foreach ($map['Protocols'] as $item1) {
                    $model->protocols[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
