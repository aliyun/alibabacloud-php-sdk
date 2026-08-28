<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateDistributionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateDistributionResponseBody\module\drafts;

class module extends Model
{
    /**
     * @var string
     */
    public $articleId;

    /**
     * @var string
     */
    public $batchId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var drafts[]
     */
    public $drafts;
    protected $_name = [
        'articleId' => 'ArticleId',
        'batchId' => 'BatchId',
        'createTime' => 'CreateTime',
        'drafts' => 'Drafts',
    ];

    public function validate()
    {
        if (\is_array($this->drafts)) {
            Model::validateArray($this->drafts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->articleId) {
            $res['ArticleId'] = $this->articleId;
        }

        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->drafts) {
            if (\is_array($this->drafts)) {
                $res['Drafts'] = [];
                $n1 = 0;
                foreach ($this->drafts as $item1) {
                    $res['Drafts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ArticleId'])) {
            $model->articleId = $map['ArticleId'];
        }

        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Drafts'])) {
            if (!empty($map['Drafts'])) {
                $model->drafts = [];
                $n1 = 0;
                foreach ($map['Drafts'] as $item1) {
                    $model->drafts[$n1] = drafts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
