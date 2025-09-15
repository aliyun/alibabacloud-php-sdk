<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;

class ListCloudResourcesRequest extends Model
{
    /**
     * @var int[]
     */
    public $certIds;

    /**
     * @var string
     */
    public $cloudName;

    /**
     * @var string
     */
    public $cloudProduct;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $secretId;

    /**
     * @var int
     */
    public $showSize;
    protected $_name = [
        'certIds' => 'CertIds',
        'cloudName' => 'CloudName',
        'cloudProduct' => 'CloudProduct',
        'currentPage' => 'CurrentPage',
        'keyword' => 'Keyword',
        'secretId' => 'SecretId',
        'showSize' => 'ShowSize',
    ];

    public function validate()
    {
        if (\is_array($this->certIds)) {
            Model::validateArray($this->certIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certIds) {
            if (\is_array($this->certIds)) {
                $res['CertIds'] = [];
                $n1 = 0;
                foreach ($this->certIds as $item1) {
                    $res['CertIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cloudName) {
            $res['CloudName'] = $this->cloudName;
        }

        if (null !== $this->cloudProduct) {
            $res['CloudProduct'] = $this->cloudProduct;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->secretId) {
            $res['SecretId'] = $this->secretId;
        }

        if (null !== $this->showSize) {
            $res['ShowSize'] = $this->showSize;
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
        if (isset($map['CertIds'])) {
            if (!empty($map['CertIds'])) {
                $model->certIds = [];
                $n1 = 0;
                foreach ($map['CertIds'] as $item1) {
                    $model->certIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CloudName'])) {
            $model->cloudName = $map['CloudName'];
        }

        if (isset($map['CloudProduct'])) {
            $model->cloudProduct = $map['CloudProduct'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['SecretId'])) {
            $model->secretId = $map['SecretId'];
        }

        if (isset($map['ShowSize'])) {
            $model->showSize = $map['ShowSize'];
        }

        return $model;
    }
}
