<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\GetKnowledgeBasePreSignedUrlResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var int
     */
    public $expiresIn;

    /**
     * @var string[]
     */
    public $preSignedUrls;
    protected $_name = [
        'bucketName' => 'bucketName',
        'expiresIn' => 'expiresIn',
        'preSignedUrls' => 'preSignedUrls',
    ];

    public function validate()
    {
        if (\is_array($this->preSignedUrls)) {
            Model::validateArray($this->preSignedUrls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['bucketName'] = $this->bucketName;
        }

        if (null !== $this->expiresIn) {
            $res['expiresIn'] = $this->expiresIn;
        }

        if (null !== $this->preSignedUrls) {
            if (\is_array($this->preSignedUrls)) {
                $res['preSignedUrls'] = [];
                $n1 = 0;
                foreach ($this->preSignedUrls as $item1) {
                    $res['preSignedUrls'][$n1] = $item1;
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
        if (isset($map['bucketName'])) {
            $model->bucketName = $map['bucketName'];
        }

        if (isset($map['expiresIn'])) {
            $model->expiresIn = $map['expiresIn'];
        }

        if (isset($map['preSignedUrls'])) {
            if (!empty($map['preSignedUrls'])) {
                $model->preSignedUrls = [];
                $n1 = 0;
                foreach ($map['preSignedUrls'] as $item1) {
                    $model->preSignedUrls[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
